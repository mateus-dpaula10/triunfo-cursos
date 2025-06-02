<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Course;
Use App\Models\Exam;
Use App\Models\ExamAttempt;

class ExamController extends Controller
{
    public function index() {
        $data = Exam::with('course', 'questions.options')->get();

        return view ('exams.index', ['exams' => $data]);
    }

    public function create() {
        $data = Course::all();

        return view ('exams.create', ['courses' => $data]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'course_id'           => 'required|exists:courses,id',
            'title'               => 'required|string|max:255',
            'questions'           => 'required|array|min:1',
            'questions.*.text'    => 'required|string',
            'questions.*.correct' => 'required|integer',
            'questions.*.options' => 'required|array|size:4'
        ]);
        
        $exam = Exam::create([
            'course_id' => $validated['course_id'],
            'title'     => $validated['title']
        ]);

        foreach ($validated['questions'] as $q) {
            $question = $exam->questions()->create([
                'text' => $q['text'],
            ]);

            foreach ($q['options'] as $index => $optionText) {
                $question->options()->create([
                    'text' => $optionText,
                    'is_correct' => ($index == $q['correct']),
                ]);
            }
        }

        return redirect()->back()->with('success', 'Prova criada com sucesso!');
    }

    public function show($id) {
        $user = auth()->user();
        $exam = Exam::with('questions.options')->findOrFail($id);

        $attemptsCount = ExamAttempt::where('user_id', $user->id)
                        ->where('exam_id', $exam->id)
                        ->count();

        if ($attemptsCount >= 3) {
            return redirect()->back()->with('error', 'Você já realizou essa prova 3 vezes e não pode fazer novamente.');
        }

        return view('exams.show', compact('exam'));
    }

    public function submit(Request $request, Exam $exam) {
        $user = auth()->user();

        $attemptsCount = ExamAttempt::where('user_id', $user->id)
                        ->where('exam_id', $exam->id)
                        ->count();

        if ($attemptsCount >= 3) {
            return redirect()->back()->with('error', 'Você já realizou essa prova 3 vezes e não pode enviar novamente.');
        }

        $answers = $request->input('answers');

        $totalQuestions = $exam->questions()->count();
        $correctAnswers = 0;

        foreach ($exam->questions as $question) {
            $correctOption = $question->options()->where('is_correct', true)->first();

            if (isset($answers[$question->id]) && $answers[$question->id] == $correctOption->id) {
                $correctAnswers++;
            }
        }

        $score = round(($correctAnswers / $totalQuestions) * 100, 2);

        ExamAttempt::create([
            'user_id' => $user->id,
            'exam_id' => $exam->id,
            'score'   => $score,
        ]);

        return redirect()->route('exams.result', ['exam' => $exam->id])->with([
            'score' => $score,
            'total' => $totalQuestions,
            'correct' => $correctAnswers,
        ]);
    }

    public function result(Exam $exam) {
        $score = session('score');
        $total = session('total');
        $correct = session('correct');

        if (!$score) {
            return redirect()->route('exams.show', $exam->id)->with('error', 'Você ainda não fez esta prova.');
        }

        return view('exams.result', compact('exam', 'score', 'total', 'correct'));
    }
}