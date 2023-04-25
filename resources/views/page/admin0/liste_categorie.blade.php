@extends('layouts/admin_master')
@section('content')

    <h1>liste categorie</h1>
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Pagination with numbering</h5>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-cfcec397-a35c-4994-a54a-50bf30775d88"
                    id="dom-cfcec397-a35c-4994-a54a-50bf30775d88">
                    <div id="tableExample2"
                        data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort" data-sort="name">Name</th>
                                        <th class="sort" data-sort="email">Email</th>
                                        <th class="sort" data-sort="age">Age</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="name">Anna</td>
                                        <td class="email">anna@example.com</td>
                                        <td class="age">18</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Homer</td>
                                        <td class="email">homer@example.com</td>
                                        <td class="age">35</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Oscar</td>
                                        <td class="email">oscar@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Emily</td>
                                        <td class="email">emily@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Jara</td>
                                        <td class="email">jara@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Clark</td>
                                        <td class="email">clark@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Jennifer</td>
                                        <td class="email">jennifer@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Tony</td>
                                        <td class="email">tony@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Tom</td>
                                        <td class="email">tom@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Michael</td>
                                        <td class="email">michael@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Antony</td>
                                        <td class="email">antony@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Raymond</td>
                                        <td class="email">raymond@example.com</td>
                                        <td class="age">52</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Marie</td>
                                        <td class="email">marie@example.com</td>
                                        <td class="age">30</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Cohen</td>
                                        <td class="email">cohen@example.com</td>
                                        <td class="age">25</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Rowen</td>
                                        <td class="email">rowen@example.com</td>
                                        <td class="age">39</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul>
                            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    