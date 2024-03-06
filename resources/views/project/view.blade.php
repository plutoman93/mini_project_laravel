@extends('layouts.backend.master')

@section('content')

@dd($id)

@livewire('project.view' ,['id'=> $id])

@endsection
