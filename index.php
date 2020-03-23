<!doctype html>
<html lang-"es">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <style>
    body {
      background-color: #EEF;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Exercise for Tidok</span>
  </nav>
  <div class="container pt-5" id="App">
    <div class="row">

      <div class="col-6">
        <div class="bg-white rounded p-4 shadow">
          <h2 class="h4">Find factorial</h2>
          <div class="row p-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Enter a tiny integer:</span>
              </div>
              <input type="number" min="0" max="10" class="form-control" v-model="entero">
            </div>
          </div>
          <div class="row p-2">
            <div class="col-12 text-center">
              <p>The factorial for {{ entero }} is: {{ factorial }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="bg-white rounded p-4 shadow">
          <h2 class="h4">Find largest word</h2>
          <div class="row p-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Enter a phrase:</span>
              </div>
              <input type="text" class="form-control" v-model="frase" placeholder="Write something">
            </div>
          </div>
          <div class="row p-2">
            <div class="col-12 text-center">
              <p>The largest word in phrase is <strong>{{ word }}</strong>, and have {{ wordLength }} letters.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-12 bg-dark rounded m-3 p-3 text-center text-muted">
        Made by Mario Rodríguez
      </div>
    </div>
  </div>

  <script>
    var app = new Vue({
      el: '#App',
      data: {
        entero: 0,
        wordLength: 0,
        frase: '',
      },
      computed: {
        factorial: function () {
          // Calcula el factorial de el número
          n = this.entero
          var resFactorial = n;
          for (let i = n - 1; i > 0; i--) {
            resFactorial *= i;
          }
          // Si el número es 0 el factorial es 1
          if (n == 0) {
            resFactorial = 1
          }
          return resFactorial;
        },
        word: function () {
          // Encuentra la palabra de mayor longitud en la frase
          var palabras = [];
          var maxLength = 0;
          var maxWord = '';
          // Quita los símbolos de la frase
          var strLimpío = this.frase.replace(/[^\w\s]/gi, '')
          if (this.frase == '') {
            // En caso de que no haya frase
            strWord = "nothing";
            this.wordLength = 0;
          } else {
            // Separa las palabras en un array
            palabras = strLimpío.split(" ");
            // Calcula la longitud de las palabras y mantiene la máxima longitud y su respectiva palabra
            for (let palabra of palabras) {
              if (palabra.length > maxLength) {
                maxWord = palabra;
                maxLength = palabra.length;
                this.wordLength = palabra.length;
              }
            }
            strWord = maxWord;
          }
          return strWord
        }
      },
    })
  </script>

</body>

</html>