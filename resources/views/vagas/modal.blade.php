
                    <!-- Modal -->
                    <div class="modal fade" id="modalDelete" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Deseja apagar a vaga?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Você deseja realmente apagar a vaga?</p>
                                    <table class="table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Empresa</th>
                                                <th scope="col">Titulo</th>
                                                <th scope="col">Descrição</th>
                                                <th scope="col">Localização</th>
                                                <th scope="col">Nivel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">{{$value->id}}</th>
                                                <td>{{$value->empresa}}</td>
                                                <td>{{$value->titulo}}</td>
                                                <td>{{$value->descricao}}</td>
                                                <td>{{$value->localizacao}}</td>
                                                <td>{{$value->nivel}}</td>
                                                <td>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="/vagas/apagar/id={{$value->id}}" class="btn btn-danger">Apagar</a>
                                </div>
                            </div>
                        </div>
                    </div>
