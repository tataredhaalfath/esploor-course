<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::query();
        $chapter_id = $request->query('chapter_id');

        $lessons->when($chapter_id, function ($query) use ($chapter_id) {
            return $query->where('chapter_id', '=', $chapter_id);
        });

        return response()->json([
            'status' => 'success',
            'data' => $lessons->get()
        ]);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return response()->json([
                'status' => 'error',
                'message' => 'lesson not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $lesson
        ]);
    }

    public function create(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'video' => 'required|string',
            'chapter_id' => 'required|integer',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $chapterId = $request->input('chapter_id');
        $chapter = Chapter::find($chapterId);

        if (!$chapter) {
            return response()->json([
                'status' => 'error',
                'message' => 'chapter not found'
            ], 404);
        }

        $lesson = Lesson::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $lesson
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'string',
            'video' => 'string',
            'chapter_id' => 'integer',
        ];

        $data = $request->all();

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $lesson = Lesson::find($id);
        if (!$lesson) {
            return response()->json([
                'status' => 'error',
                'message' => 'lesson not found'
            ]);
        }


        $chapterId = $request->input('chapter_id');

        if ($chapterId) {
            $chapter = Chapter::find($chapterId);
            if (!$chapter) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'chapter not found'
                ], 404);
            }
        }

        $lesson->update($data);
        return response()->json([
            'status' => 'success',
            'data' => $lesson
        ]);
    }

    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return response()->json([
                'status' => 'error',
                'message' => 'lesson not found'
            ], 404);
        }

        $lesson->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'lesson deleted'
        ]);
    }
}
