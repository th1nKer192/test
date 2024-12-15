@extends('main_menu.master')
@section('content')
    <section>
        <div class="content">
            <div class="content">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mt-3">Quản lý Tài Khoản</h2>
                        </div>
                        <hr class="horizontal dark mt-0 mb-2">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center text-nowrap">#</th>
                                        <th class="text-center text-nowrap">Tài Khoản</th>
                                        <th class="text-center text-nowrap">Mật Khẩu</th>
                                        <th class="text-center text-nowrap">Email</th>
                                        <th class="text-center text-nowrap">Thông Tin Chi Tiết</th>
                                        <th class="text-center text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle text-nowrap">1</td>
                                        <td class="text-center align-middle text-nowrap">0829769379</td>
                                        <td class="text-center align-middle text-nowrap">thinh12345</td>
                                        <td class="text-center align-middle text-nowrap">tkfacebookcuathinh@gmail.com</td>
                                        <td class="text-center align-middle text-nowrap"><i
                                                class="material-symbols-rounded opacity-10" data-bs-toggle="modal"
                                                data-bs-target="#thongTinChiTiet">
                                                integration_instructions
                                            </i></td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button class="btn btn-primary">Chỉnh Sửa</button>
                                            <button class="btn btn-danger">Xoá</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle text-nowrap">2</td>
                                        <td class="text-center align-middle text-nowrap">0829769379</td>
                                        <td class="text-center align-middle text-nowrap">thinh12345</td>
                                        <td class="text-center align-middle text-nowrap">tkfacebookcuathinh@gmail.com</td>
                                        <td class="text-center align-middle text-nowrap"><i
                                                class="material-symbols-rounded opacity-10" data-bs-toggle="modal"
                                                data-bs-target="#thongTinChiTiet">
                                                integration_instructions
                                            </i></td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button class="btn btn-primary">Chỉnh Sửa</button>
                                            <button class="btn btn-danger">Xoá</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle text-nowrap">3</td>
                                        <td class="text-center align-middle text-nowrap">0829769379</td>
                                        <td class="text-center align-middle text-nowrap">thinh12345</td>
                                        <td class="text-center align-middle text-nowrap">tkfacebookcuathinh@gmail.com</td>
                                        <td class="text-center align-middle text-nowrap"><i
                                                class="material-symbols-rounded opacity-10" data-bs-toggle="modal"
                                                data-bs-target="#thongTinChiTiet">
                                                integration_instructions
                                            </i></td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button class="btn btn-primary">Chỉnh Sửa</button>
                                            <button class="btn btn-danger">Xoá</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle text-nowrap">4</td>
                                        <td class="text-center align-middle text-nowrap">0829769379</td>
                                        <td class="text-center align-middle text-nowrap">thinh12345</td>
                                        <td class="text-center align-middle text-nowrap">tkfacebookcuathinh@gmail.com</td>
                                        <td class="text-center align-middle text-nowrap"><i
                                                class="material-symbols-rounded opacity-10" data-bs-toggle="modal"
                                                data-bs-target="#thongTinChiTiet">
                                                integration_instructions
                                            </i></td>
                                        <td class="text-center align-middle text-nowrap">
                                            <button class="btn btn-primary">Chỉnh Sửa</button>
                                            <button class="btn btn-danger">Xoá</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                    {{-- modal --}}
                    <div class="modal fade" id="thongTinChiTiet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Thông Tin Chi Tiết</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                             Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident repellat est. Necessitatibus quis tempore, inventore ratione repudiandae deserunt placeat cum non! Ea, id! Temporibus error exercitationem quo animi est!
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection
