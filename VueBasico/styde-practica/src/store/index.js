let tasks = [
     {
       title: 'Aprender Vue.js',
        pending: true
      },
      {
        title: 'Mejorar el lenguaje',
        pending: true
      },
      {
        title: 'Crear una API',
        pending: false
      }
];

tasks.forEach((task, index) => {
  task.description = `
  El acento grave es un signo ortográfico utilizado en la escritura
  de varios idiomas para indicar diversas propiedades
  (tales como apertura, intensidad o tono) en esos idiomas.`

   task.id = index + 1;
});

export default {
  state: {
    tasks
  },
  findTask(id) {
    return this.state.tasks.find(task => task.id == id);
  }
};
