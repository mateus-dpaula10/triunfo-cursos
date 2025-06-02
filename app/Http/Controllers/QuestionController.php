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

}
