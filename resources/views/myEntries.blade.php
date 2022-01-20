@extends('front.layouts.master')
@section('title','Entrylerim')
@section('content')
    @include('widget.titlewidget')
    @include('widget.topnavwidget')
    <div class="container-fluid">
        <div class="card-header mb-3 mt-3 fw-bolder fs-3">
            {{\Illuminate\Support\Facades\Auth::user()->name." Entryleri"}}
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Başlık</th>
                    <th scope="col">İçerik</th>
                    <th scope="col">Oluşturulma Tarihi</th>
                    <th scope="col">İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($myEntries as $myEntry)
                <tr>
                    <th scope="row">{{$myEntry->id}}</th>
                    <td>{{$myEntry->title_id}}</td>
                    <td>{{$myEntry->content}}</td>
                    <td>{{$myEntry->created_at->format('d-m-y H:i')}}</td>
                    <td>
                        <a href="#" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        <a href="#" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="#" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $myEntries->links() }}
            </div>
        </div>
@endsection
