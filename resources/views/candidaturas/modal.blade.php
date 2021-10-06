@if(!empty($value))
<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja apagar a candidatura?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Você deseja realmente apagar a candidatura?</p>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo da Vaga</th>
                            <th scope="col">Nome da Pessoa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$value->id}}</th>
                            <th>{{$value->titulo}}</th>
                            <th>{{$value->nome}}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                <a href="/candidaturas/apagar/id={{$value->id}}" class="btn btn-danger">Apagar</a>
            </div>
        </div>
    </div>
</div>
@endif