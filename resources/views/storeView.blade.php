@extends('layouts.app')

@section('title', 'Book Store')
    
@section('content')
    
        <section>
            <table border="1">
                <tr>
                    <td>No</td>
                    <td>Book Name</td>
                    <td>Category Name</td>
                    <td>Author Name</td>
                    <td>Rating</td>
                    <td>Voter</td>
                </tr>
                @foreach ($datas as $data)
                    <tr>
                        <td></td>
                        <td>{{ $data->books }}</td>
                        <td>{{ $data->book_category }}</td>
                        <td>{{ $data->author }}</td>
                        <td>{{ $data->rating }}</td>
                        <td></td>
                    </tr> 
                @endforeach
                
            </table>
        </section>

@endsection