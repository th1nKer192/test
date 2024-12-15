@extends('main_menu.master')
@section('content')
    <section>
        <div class="content">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2 class="mt-3">Quản lý giỏ hàng</h2>
                    </div>
                    <hr class="horizontal dark mt-0 mb-2">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center text-nowrap">#</th>
                                    <th class="text-center text-nowrap">Bìa Sách</th>
                                    <th class="text-center text-nowrap">Tên Sách</th>
                                    <th class="text-center text-nowrap">Slug Sách</th>
                                    <th class="text-center text-nowrap">Giá</th>
                                    <th class="text-center text-nowrap" style="width: 30px;">Số Lượng</th>
                                    <th class="text-center text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center text-nowrap">1</td>
                                    <td class="text-center text-nowrap"><img src="" alt=""></td>
                                    <td class="text-center text-nowrap">Truyện Tranh</td>
                                    <td class="text-center text-nowrap">truyen-tranh</td>
                                    <td class="text-center text-nowrap">150.000 VNĐ</td>
                                    <td class="text-center text-nowrap">
                                        <input type="number" class="form-control text-center" onfocus="focused(this)"
                                            onfocusout="defocused(this)" value="1" style="width: 30px;">
                                    </td>
                                    <td class="text-center text-nowrap">
                                        <button class="btn btn-primary">Đặt Ngay</button>
                                        <button class="btn btn-danger">Xoá sách</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col text-end">
                                <button class="btn btn-lg btn-warning">Thanh Toán</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
