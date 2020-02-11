<!-- 
    - NOME
    - EMAIL / TELEFONE
    - MENSAGEM
 -->

<form >
    <div class="row">

        <div class="col-12">
            <div class="form-group form-group-lg">
                <label for="nome">Nome<span>*</span></label>
                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nameHelp" placeholder="Seu Nome">
            </div>
        </div>
    
        <div class="col-12 col-md-6">
            <div class="form-group form-group-lg">
                <label for="email">E-mail<span>*</span></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="exemplo@exemplo.com">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group form-group-lg">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="telefoneHelp" placeholder="Seu telefone">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group form-group-lg">
                <label for="telefone">Descrição<span>*</span></label>
                <textarea class="form-control" rows="7" id="descricao" name="descricao" placeholder="Diga me o que você pretente com este contato"></textarea>
            </div>
        </div>
            
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

    </div>
</form>