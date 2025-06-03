<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $user = auth()->user();

        $data = Course::with([
            'exam',
            'exam.attempts' => function ($query) use ($user) {
                $query->where('user_id', $user->id)->latest();
            }
        ])->get();

        return view('cursos.index', ['courses' => $data]);
    }

    public function create() {
        return view('cursos.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'pdf_path'    => 'nullable|file|mimes:pdf|max:20480'
        ]);

        if ($request->hasFile('pdf_path')) {
            $data['pdf_path'] = $request->file('pdf_path')->store('apostilas', 'public');
        }

        Course::create($data);

        return redirect()->route('cursos.create')->with('success', 'Curso criado com sucesso!');
    }

    public function update(Request $request) {
        $data = $request->input('courses');

        foreach ($data as $courseData) {
            if (!isset($courseData['id'])) {
                continue;
            }

            $course = Course::find($courseData['id']);
            if (!$course) {
                continue;
            }

            if (isset($courseData['delete']) && $courseData['delete']) {
                if ($course->exam) {
                    $course->exam->attempts()->delete();

                    foreach ($course->exam->questions as $question) {
                        $question->options()->delete();
                        $question->delete();
                    }

                    $course->exam->delete();
                }

                $course->delete();
                continue;
            }

            $course->title = $courseData['title'] ?? $course->title;
            $course->description = $courseData['description'] ?? $course->description;            
            $course->save();
        }

        return redirect()->back()->with('success', 'Alterações feitas com sucesso!');
    }
}
