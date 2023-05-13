@extends('admin.layouts.master')
@section('content')


<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> FAQS</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-1">
        <h2>All FAQS</h2>
        <p>All FAQS are listed here.</p>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Question</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->question }}</td>
                    <td>{{ Str::limit($item->answer,100) }}</td>
                    <td>{{ $item->created_at->format('d-M, Y') }}</td>
                    <td><a href="{{ route('faqs.edit', $item->id) }}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td>
                        <form action="{{ route('faqs.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="sb2-2-1-edit" onclick="return confirm('Are you sure you want to delete this FAQ?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
               
            </tbody>
        </table>
    </div>
</div>

@endsection