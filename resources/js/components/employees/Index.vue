<template>
    <div>
         <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employess</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">
            <div>
              
                    <div class="alert alert-success">
                    
                    </div>
              
            </div>
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <form >
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" class="form-control mb-2" 
                                    id="inlineFormInput" placeholder="Buscar">    
                                </div>  
                                <div class="col">
                                    <button type="submit" class="btn btn-primary mb-2">Search</button>    
                                </div>  
                            </div> 
                        </form>
                    </div>
                </div>
                <div>
                    <router-link 
                    :to="{name:'EmployeesCreate'}" 
                    class=" float-right btn btn-primary mb-2">Cadastrar</router-link>
                   
                </div>
                
            </div>
            
           
    
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Primeiro Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                   
                        <tr>
                            <th scope="row"></th>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                          
                            <td>
                                <a href="" class="btn btn-success">Editar</a>
                            </td>
                            
                        </tr>
                   
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    
}
</script>