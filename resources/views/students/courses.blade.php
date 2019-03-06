@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Courses I've enrolled to</h2>
        <hr>
            <table class="table table-condensed table-hover table-striped dt" id="students">
            	<thead>
            		<tr>
            			<th>Code</th>
                        <th>Name</th>
                        <th>Lecturer</th>
            			<th>Capacity</th>
            			
            		</tr>
            	</thead>
            	<tbody>
            	@foreach($student->RegisteredCourses as $course)
                    <tr>
                        <td>{{ $course->Course->code }}</td>
                        <td>{{ $course->Course->name }}</td>
                        <td>{{ $course->Course->Lecturer->name }}</td>
                        <td>{{ $course->Course->capacity }}</td>
            			
            			
            		</tr>
            		
            	@endforeach
            	</tbody>
            </table>
        </div>
    </div>
</div>
@endsection
