# 🎓 Sistema de Gestão de Alunos, Cursos e Provas

Este sistema permite o gerenciamento de alunos, cursos e aplicação de provas online com controle de tentativas e tempo limite. Ideal para instituições de ensino que desejam aplicar avaliações de forma segura e eficiente.

## 📌 Funcionalidades

### 🔐 Administração
- Cadastro, edição e exclusão de alunos e cursos 
- Criação e gerenciamento de provas com perguntas e tempo limite
- Visualização de tentativas para aluno e reset individual

### 🧑‍🎓 Aluno
- Visualização de cursos disponíveis
- Acesso às provas dos cursos matriculados
- Tempo limite para realizar cada prova
- Salvamento automático de:
  - Questões já respondidas
  - Tempo decorrido

> Dados são salvos no `localStorage` para recuperação em caso de queda de conexão ou recarregamento da página.

---

## 🛠️ Tecnologias Utilizadas

- **Frontend:** HTML, CSS, JavaScript (ou framework como Vue/React/Angular)
- **Backend:** Laravel (ou outro framework se aplicável)
- **Banco de dados:** MySQL / PostgreSQL
- **Autenticação:** Middleware de autenticação para admins e alunos
- **Persistência Local:** `localStorage` para dados temporários do aluno durante provas

---

## 🧪 Comportamento das Provas

- O aluno inicia a prova e o **temporizador começa a contar**.
- As respostas e o tempo atual são **salvos no `localStorage`** a cada alteração.
- Caso o aluno:
  - Feche a aba/navegador
  - Perca a conexão
  - Recarregue a página
  A prova será retomada com o **tempo restante e respostas salvas**.

> A prova será automaticamente finalizada ao atingir o tempo limite.
