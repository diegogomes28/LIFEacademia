const contatos = window.document.querySelectorAll(".contato__alert");

contatos.forEach((contato) => {
  contato.addEventListener("click", () => {
    window.alert("E-mail:  Life_SAC@gmail.com  Telefone: 3224-3224");
  });
});

const mensalidade = window.document.getElementById("mensalidade");

mensalidade.addEventListener("click", () => {
  window.alert("PIX: 83999904575 || Nome: Diego da cunha Gomes ");
});
