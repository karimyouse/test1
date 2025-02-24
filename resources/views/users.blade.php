<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }
    </style>
</head>
     
@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1>User List App</h1>
        <div class="offset-md-2 col-md-8">
            <div class="card">
                @if(isset($user))

                <div class="card-header">
                    Update Task
                </div>
                <div class="card-body">
                    <!-- Update Task Form -->
                    <form action="{{url('update')}}" method="POST">
                        @csrf 
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <!-- Task Name -->
                        <div class="mb-3">
                            <label for="user-name" class="form-label">Task</label>
                            <input type="text" name="name" id="user-name" class="form-control" value="{{$user->name}}">
                        </div>

                        <!-- Update Task Button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-2"></i>Update Task
                            </button>
                        </div>
                    </form>
                </div>



                @else
                <div class="card-header">
                    New Task
                </div>
                <div class="card-body">
                    <!-- New Task Form -->
                    <form action="create" method="POST">
                        @csrf 
                        <!-- Task Name -->
                        <div class="mb-3">
                            <label for="user-name" class="form-label">Task</label>
                            <input type="text" name="name" id="user-name" class="form-control" value="">
                        </div>

                        <!-- Add Task Button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-2"></i>Add Task
                            </button>
                        </div>
                    </form>
                </div>
                @endif

            </div>

            <!-- Current Tasks -->
            <div class="card mt-4">
                <div class="card-header">
                    Current Tasks
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user) 
                            
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>
                                    <form action="/delete/{{$user->id}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                    <form action="/edit/{{$user->id}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-info me-2"></i>Edit
                                        </button>
                                    </form>
                                </td>
                            </tr>
                                  @endforeach

                             
                            <tr>
                                <td>Task 2</td>
                                <td>
                                    <form action="#" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Task 3</td>
                                <td>
                                    <form action="#" method="POST" class="d-inline">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
    
    
