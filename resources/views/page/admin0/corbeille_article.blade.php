@extends('layouts/admin_master')
@section('content')

    <h1>article supprimé</h1>
    <div class="table-responsive scrollbar">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"> </th>
        <th scope="col">joined</th>
      </tr>
    </thead>
    <tbody>
      <tr class="hover-actions-trigger">
        <td class="align-middle text-nowrap">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
            </div>
            <div class="ms-2">Ricky Antony</div>
          </div>
        </td>
        <td class="align-middle text-nowrap">ricky@example.com</td>
        <td class="w-auto">
          <div class="btn-group btn-group hover-actions end-0 me-4">
            <button class="btn btn-success pe-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></button>
            <button class="btn btn-danger ps-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
          </div>
        </td>
        <td class="align-middle text-nowrap">30/03/2018</td>
      </tr>
      <tr class="hover-actions-trigger">
        <td class="align-middle text-nowrap">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
            </div>
            <div class="ms-2">Emma Watson</div>
          </div>
        </td>
        <td class="align-middle text-nowrap">emma@example.com</td>
        <td class="w-auto">
          <div class="btn-group btn-group hover-actions end-0 me-4">
            <button class="btn btn-success pe-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></button>
            <button class="btn btn-danger ps-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
          </div>
        </td>
        <td class="align-middle text-nowrap">11/07/2017</td>
      </tr>
      <tr class="hover-actions-trigger">
        <td class="align-middle text-nowrap">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
              <div class="avatar-name rounded-circle"><span>RA</span></div>
            </div>
            <div class="ms-2">Rowen Atkinson</div>
          </div>
        </td>
        <td class="align-middle text-nowrap">rown@example.com</td>
        <td class="w-auto">
          <div class="btn-group btn-group hover-actions end-0 me-4">
            <button class="btn btn-success pe-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></button>
            <button class="btn btn-danger ps-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
          </div>
        </td>
        <td class="align-middle text-nowrap">05/04/2016</td>
      </tr>
      <tr class="hover-actions-trigger">
        <td class="align-middle text-nowrap">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
            </div>
            <div class="ms-2">Antony Hopkins</div>
          </div>
        </td>
        <td class="align-middle text-nowrap">antony@example.com</td>
        <td class="w-auto">
          <div class="btn-group btn-group hover-actions end-0 me-4">
            <button class="btn btn-success pe-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></button>
            <button class="btn btn-danger ps-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
          </div>
        </td>
        <td class="align-middle text-nowrap">05/04/2018</td>
      </tr>
      <tr class="hover-actions-trigger">
        <td class="align-middle text-nowrap">
          <div class="d-flex align-items-center">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
            </div>
            <div class="ms-2">Jennifer Schramm</div>
          </div>
        </td>
        <td class="align-middle text-nowrap">jennifer@example.com</td>
        <td class="w-auto">
          <div class="btn-group btn-group hover-actions end-0 me-4">
            <button class="btn btn-success pe-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><span class="fas fa-edit"></span></button>
            <button class="btn btn-danger ps-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><span class="fas fa-trash-alt"></span></button>
          </div>
        </td>
        <td class="align-middle text-nowrap">17/03/2016</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
   