<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return NoteResource::collection(Note::all());
    }

    public function store(NoteRequest $request)
    {
        return new NoteResource(Note::create($request->validated()));
    }

    public function show(Note $note)
    {
        return new NoteResource($note);
    }

    public function update(NoteRequest $request, Note $note)
    {
        $note->update($request->validated());

        return new NoteResource($note);
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return response()->json();
    }
}
