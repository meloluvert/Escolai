@extends('layout')
<div>
    <h3 style="display:flex; align-items: center; justify-content: center;">Anúncio</h3>
</div>
<div style="display:flex; align-items: center; justify-content: center;">
    <form>
        <div style="display:flex; align-items: center; justify-content: center;">
            <div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputEmail1" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo">
                </div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputEmail1" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao">
                </div>
            </div>
            <div>
                <div>
                    <img src="" alt="IMAGEM ESCOLA">
                </div>
                <div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Tempo</label>
                        <input type="number" class="form-control" id="tempo">
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Qtd</label>
                    <input list="browsers" name="browser">
                    <datalist id="browsers">
                        <option value="Dias">
                        <option value="Semanas">
                        <option value="Meses">
                    </datalist>
                </div>
                <div>
                    <label for="exampleInputEmail1" class="form-label">Alcance</label>
                    <input type="number" class="form-control" id="alcance">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Somente da minha cidade</label>
                  </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cancelar</button>
        <button type="submit" class="btn btn-primary">Pagamento</button>
    </form>
</div>