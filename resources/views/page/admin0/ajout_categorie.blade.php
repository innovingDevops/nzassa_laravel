@extends('layouts/admin_master')
@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h4 class="mb-0" data-anchor="data-anchor">Catégorie</h4>
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
                            <label class="form-label" for="basic-form-name">Créer une Catégorie</label>
                            <input class="form-control" id="basic-form-name" type="text" placeholder="business" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-form-textarea">Description</label>
                            <textarea class="form-control" id="basic-form-textarea" rows="3"
                                placeholder="Description"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection