@extends('layouts.master')
@section('content')
<div class="pagetitle">
  <h1>Data Merek</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
      <li class="breadcrumb-item active">Data Merek</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  @if (Session::has('success'))
  <div class="alert alert-success" role="alert">
    {(Session::get('success'))}
  </div>
  @endif
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Merek</h5>
              <table class="table table-bordered merek_datatable" id="merek_datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Merek</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Data Merek</h5>

            <!-- Horizontal Form -->
            <form action="" id="form-store" method="post">
              @csrf
              <div class="row mb-4">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Merek</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputText" name="nama">
                </div>
              </div>
              <input type="hidden" name="action" id="action" value="Add" />
              <div class="float-right">
              <input type="submit" name="action_button" id="action_button" value="Tambah" class="btn btn-primary" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <form method="post" id="form-edit" class="form-horizontal">
        @csrf
          <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Add New Record</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <span id="form_result"></span>
              <div class="form-group">
                  <label>Nama Merek: </label>
                  <input type="text" name="nama" id="nama" class="form-control" />
              </div>
              <input type="hidden" name="action" id="action" value="Edit" />
              <input type="hidden" name="hidden_id" id="hidden_id" />
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" name="action_button" id="action_button" value="Edit" class="btn btn-info" />
          </div>
      </form>  
      </div>
      </div>
  </div>

    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <form method="post" id="sample_form" class="form-horizontal">
          <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Konfirmasi</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h4 align="center" style="margin:0;">Apakah anda yakin menghapus data ini?</h4>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
          </div>
      </form>  
      </div>
      </div>
  </div>

  </section>
@endsection