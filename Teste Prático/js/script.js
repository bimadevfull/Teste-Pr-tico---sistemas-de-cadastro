function editarUsuario(id, nome, email) {
    const form = document.getElementById('cadastroForm');
    form.innerHTML = `
        <h2>Editar Usuário</h2>
        <input type="hidden" name="id" value="${id}">
        <input type="text" name="nome" value="${nome}" required>
        <input type="email" name="email" value="${email}" required>
        <button type="submit" name="editar">Salvar Alterações</button>
    `;
}