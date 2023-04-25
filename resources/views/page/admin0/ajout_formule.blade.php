@extends('layouts/admin_master')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor">Formule N'Zassa</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-160a4566-7e94-45a2-bf04-b36ef49d954f"
                    id="dom-160a4566-7e94-45a2-bf04-b36ef49d954f">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Logo de la Formule</label>
                            <input class="form-control" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Nom</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-name">Titre</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="Name" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image bannière</label>
                            <input class="form-control" type="file" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="basic-form-checkbox" type="checkbox" />
                            <label class="form-check-label" for="basic-form-checkbox">Remember me</label>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection