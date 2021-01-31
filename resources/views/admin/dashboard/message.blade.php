@extends('admin.layout')
@include('admin.dashboard.navbar')
@section('admin')

    <div class="container">
        <div class="container p-4">

            @if( @session('destroy') )
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ @session('destroy') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif


            <table class="table-responsive-md col-md-12 m-auto ">
            <thead>
            <tr class="bg-dark text-white">
                <th  scope="col" class="p-2" > Fecha</th>
                <th scope="col" class="p-2" >Nombre</th>
                <th scope="col" class="p-2" >Telefono</th>
                <th scope="col" class="p-2" >Email</th>
                <th scope="col" class="p-2" >Mensaje</th>
                <th scope="col" class="p-2" >Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $messages as $message)
                <tr>
                    <th scope="row">{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y')}}</th>
                    <td class="p-1">{{ $message->name }}</td>
                    <td class="p-1">{{ $message->phone  }}</td>
                    <td class="p-1"><strong>{{  $message->email  }}</strong></td>
                    <td class="p-1">{{ $message->message  }}</td>

                    <td>
                        <a href="{{ route('admin.message.destroy',$message->id) }}" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div> <!--End col-md-8-->
    </div> <!--End row-->
@endsection
