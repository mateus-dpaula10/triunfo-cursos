<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Question;
Use App\Models\Option;

class QuestionController extends Controller
{
    public function update(Request $request, $id) {
        $question = Question::findOrFail($id);

        $question->update([
            'text' => $request->input('text')
        ]);

        foreach ($request->input('options', []) as $optionId => $optionData) {
            $option = Option::find($optionId);
            if ($option && $option->question_id == $question->id) {
                $option->update([
                    'text'       => $optionData['text'],
                    'is_correct' => $request->input('correct_option_id') == $optionId,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Questão atualizada!');
    }   

    public function store(Request $request) {
        $request->validate([
            'exam_id' => 'required|exists:exams,id',
            'text' => 'required|string',
            'options' => 'required|array|min:2',
            'correct_option' => 'required|numeric',
        ]);

        $question = Question::create([
            'exam_id' => $request->exam_id,
            'text' => $request->text,
        ]);

        foreach ($request->options as $index => $optionData) {
            Option::create([
                'question_id' => $question->id,
                'text' => $optionData['text'],
                'is_correct' => $index == $request->correct_option,
            ]);
        }

        return redirect()->back()->with('success', 'Pergunta adicionada!');
    }

    public function destroy($id) {
        $question = Question::findOrFail($id);
        $question->options()->delete();
        $question->delete();

        return redirect()->route('exams.index')->with('success', 'Pergunta excluída!');
    }
}
