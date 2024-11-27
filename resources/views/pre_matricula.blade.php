@extends('layouts.app')

@section('title', 'Estrutura - Autoescola')

@section('content') 
    <!-- Titulo da pagina-->
    <section id="top-tag">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="d-inline-block text-white"><strong>PRÉ-MATRÍCULA</strong></h2>
            </div>
        </div>
    </section>
    <section id="matricula">
        <div class="container mt-5">
            <div class="row externo">
              <!-- Coluna do Formulário -->
              <div class="col-lg-8 form-bg">
                <form  id="prematriculaForm" action="{{ route('prematricula.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <!-- Campo Nome -->
                  <div class="col-md-12 mb-3">
                      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                  </div>

                  <!-- Campo Telefone e Email -->
                  <div class="row mb-3">
                      <div class="col-md-6 custom-padding-left">
                          <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
                      </div>
                      <div class="col-md-6 custom-padding-right">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                      </div>
                  </div>

                  <!-- Campo Categoria -->
                  <div class="row mb-3">
                    <div class="col-md-6 custom-padding-left">
                        <select class="form-control" name="categoria" id="categoria" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    
                      <div class="col-md-6 custom-padding-right">
                          <label for="anexo" class="btn btn-primary w-100 rounded-4 d-none d-md-block">
                              <i class="fa fa-paperclip fa-2x" aria-hidden="true"></i>
                              Anexo RG/CPF e comprovante de residência
                          </label>

                          <label for="anexo" class="btn btn-primary w-100 rounded-4 d-flex justify-content-center align-items-center d-block d-md-none">
                              <i class="fa fa-paperclip fa-2x" aria-hidden="true"></i>
                              Anexo RG/CPF e comprovante de residência
                          </label>

                          <input type="file" class="form-control" name="anexo[]" id="anexo" multiple style="display: none;" required>
                          <small>Máximo de 3 arquivos, até 5MB cada, formato PDF ou Imagem</small>
                          <div id="progressContainer" style="margin-top: 10px;"></div>
                      </div>
                  </div>

                  <!-- Botão de Enviar -->
                  <button type="submit" class="btn btn-primary btn-desktop" style="background: #A40206!important; border: 1px solid #A40206!important;">
                      Enviar Mensagem
                  </button>

                  <!-- Botão para Mobile -->
                  <div class="row mb-3">
                      <div class="col-12 text-center d-block d-md-none">
                          <button type="submit" class="btn btn-primary" style="background: #A40206!important; border: 1px solid #A40206!important;">
                              Enviar Mensagem
                          </button>
                      </div>
                  </div>
              </form>
              </div>
        
                <!-- Coluna do Aviso -->
                <div class="col-lg-4">
                    <div class="alert-payament">
                        <h5 class="alert-heading">Formas de Pagamento</h5>
                        <ul class="mb-0">
                            <li>Cartão de crédito</li>
                            <li>Crediário próprio (pagamento facilitado, sem consultas ao SPC/SERASA)</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
</section>

    
<script>
    document.getElementById('prematriculaForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Previne o envio padrão do formulário

        const form = e.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(data => {
            form.reset(); // Limpa o formulário
            document.getElementById('anexo').innerHTML = ''; // Limpa a lista de arquivos
            progressContainer.innerHTML = ''; 
            alert('Formulário enviado com sucesso!');
        })
        .catch(error => {
            alert('Ocorreu um erro: ' + error.message);
        });
    });
</script>

<script>
    const fileInput = document.getElementById('anexo');
    const progressContainer = document.getElementById('progressContainer');
    const submitBtn = document.getElementById('submitBtn');

    let selectedFiles = []; // Armazena os arquivos selecionados

    // Adiciona arquivos ao array quando selecionados
    fileInput.addEventListener('change', () => {
        const files = Array.from(fileInput.files);
        if (selectedFiles.length + files.length > 3) {
            alert('Você pode enviar no máximo 3 arquivos.');
            return;
        }
        selectedFiles = [...selectedFiles, ...files];
        renderFileList();
    });

    // Renderiza a lista de arquivos, botões "X" e barras de progresso
    function renderFileList() {
        progressContainer.innerHTML = ''; // Limpa os elementos antigos
        selectedFiles.forEach((file, index) => {
            const fileWrapper = document.createElement('div');
            fileWrapper.style.display = 'flex';
            fileWrapper.style.alignItems = 'center';
            fileWrapper.style.marginBottom = '10px';

            const fileLabel = document.createElement('small');
            fileLabel.textContent = `Arquivo ${index + 1}: ${file.name}`;
            fileLabel.style.flex = '1';

            const progressBar = document.createElement('progress');
            progressBar.id = `uploadProgress${index}`;
            progressBar.value = 0;
            progressBar.max = 100;
            progressBar.style.flex = '2';
            progressBar.style.marginRight = '10px';

            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'X';
            deleteButton.style.backgroundColor = 'red';
            deleteButton.style.color = 'white';
            deleteButton.style.border = 'none';
            deleteButton.style.borderRadius = '50%';
            deleteButton.style.width = '25px';
            deleteButton.style.height = '25px';
            deleteButton.style.cursor = 'pointer';

            // Evento de clique para remover o arquivo
            deleteButton.addEventListener('click', () => {
                selectedFiles.splice(index, 1); // Remove o arquivo do array
                renderFileList(); // Atualiza a lista de arquivos
            });

            fileWrapper.appendChild(fileLabel);
            fileWrapper.appendChild(progressBar);
            fileWrapper.appendChild(deleteButton);
            progressContainer.appendChild(fileWrapper);
        });
    }

    // Adiciona evento ao botão de envio
    submitBtn.addEventListener('click', () => {
        if (selectedFiles.length === 0) {
            alert('Selecione pelo menos um arquivo.');
            return;
        }

        selectedFiles.forEach((file, index) => {
            const progressBar = document.getElementById(`uploadProgress${index}`);
            uploadFile(file, progressBar);
        });
    });

    // Função de upload real do arquivo
    function uploadFile(file, progressBar) {
        const formData = new FormData();
        formData.append('anexo[]', file);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '{{ route("prematricula.store") }}', true);

        // Configuração do cabeçalho CSRF, se necessário
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

        // Monitora o progresso do upload
        xhr.upload.onprogress = (event) => {
            if (event.lengthComputable) {
                const percentComplete = Math.round((event.loaded / event.total) * 100);
                progressBar.value = percentComplete; // Atualiza a barra de progresso
            }
        };

        // Lida com o término do upload
        xhr.onload = () => {
            if (xhr.status === 200) {
                progressBar.value = 100; // Upload completo
                alert(`Arquivo ${file.name} enviado com sucesso.`);
            } else {
                alert(`Erro ao enviar o arquivo: ${file.name}. Status: ${xhr.status}`);
            }
        };

        // Lida com erros de rede
        xhr.onerror = () => {
            alert(`Erro de rede ao enviar o arquivo: ${file.name}`);
        };

        // Envia o arquivo
        xhr.send(formData);
    }

</script>
      
@endsection
@push('styles')
    <link href="{{ asset('css/matricula.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endpush