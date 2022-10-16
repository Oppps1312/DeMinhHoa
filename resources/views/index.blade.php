@extends('layout');
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6">
                    <h3>Quan ly sinh vien</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end">Them moi</a>
                </div>
            </div>
            <div class="card-border">
                @if (Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                    
                @endif
                <table class="table table-borded">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ma sinh vien</th>
                            <th>Full Name</th>
                            <th>Birthday</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $stu)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$stu->MaSV}}</td>
                            <td>{{$stu->HoTen}}</td>
                            <td>{{$stu->NgaySinh}}</td>
                            <td>{{$stu->Diachi}}</td>
                            <td>    
                                <form action="{{route('sinhvien.destroy',$stu->id)}}" method="POST">
                                    <a href="{{route('sinhvien.edit',$stu->id)}}" class="btn btn-info">Sua</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xoa</button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection
