@extends('admin-layout.admin-layout')
@section('content')
@php
    $stt = 1;
@endphp
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-secondary">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Size</th>
                        <th>Loại sản phẩm</th>
                        <th>Nhà sản xuất</th>
                        <th>Màu sắc</th>
                        <th>Giới tính</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr @php if($item->count < 10){echo "style='color:red'";} @endphp>
                        <td>{{$stt++}}</td>
                        <td>{{$item->product_name}}</td>
                        <td><img style="width: 50px" src="{{url('/img/image_product/'.$item->image)}}" alt=""></td>
                        <td>{{$item->size}}</td>
                        <td>
                            @foreach ($typeProduct->where('id', $item->type_id) as $type)
                                {{$type->name}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($manu->where('id', $item->manu_id) as $mn)
                                {{$mn->name}}
                            @endforeach
                        </td>
                        <td>
                            {{-- @foreach ($color->where('id', $item->color) as $col)
                                {{$col->name}}
                            @endforeach --}}
                            {{$color->where('id', $item->color)->first()->name}}
                        </td>
                        <td>{{$item->gender == 1 ? "Nam" : "Nữ"}}</td>
                        <td>{{$item->count}}</td>
                        <td>${{$item->price}}</td>
                        <td>
                            <a href="{{url('/product/delete/'.$item->id)}}" class="text-danger"><i class="fas fa-trash"></i></a>
                            <a href="{{url('/admin/product/edit/'.$item->id)}}" class="text-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection