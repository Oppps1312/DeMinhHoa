@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Them sinh vien</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sach sinh vien</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ma sinh vien</strong>
                            <input type="text" name="MaSV" class="form-control" placeholder="Nhap ma sinh vien">
                        </div>
                        <div class="form-group">
                            <strong>Ten sinh vien</strong>
                            <input type="text" name="HoTen" class="form-control" placeholder="Nhap ho ten sinh vien">
                        </div>
                        <div class="form-group">
                            <strong>Nhap ngay sinh</strong>
                            <input type="date" name="NgaySinh" class="form-control" placeholder="Nhap ngay sinh sinh vien">
                        </div>
                        <div class="form-group">
                            <strong>Nhap dia chi</strong>
                            <input type="text" name="DiaChi" class="form-control" placeholder="Nhap dia chi sinh vien">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Luu</button>
            </form>
        </div>
    </div>
</div>
    
@endsection