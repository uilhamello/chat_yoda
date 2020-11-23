<template>
    <div>
        <div id="myModal" class="modal-win">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>{{myHeader}}</h2>
                </div>
                <div class="modal-body">
                        <p>{{conversation}}</p>
                </div>
                <div class="answer-form">
                    <input type="text" v-model="answer">
                    <button @click="send">chat</button>
                </div>
        
                <div class="modal-footer">
                    <h5>{{myFooter}}</h5>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: {
        conversation: "Olá, inicie um chat",
        answer: "digite algo...",
        message: 'Hello Vue!'
    },
    methods: {
        send() {
            console.log(this.conversation, this.answer)
            this.conversation = this.conversation+"<br>"+this.answer
        },
    },
    created: function() {
        window.addEventListener('click',this.janelaClick);
    },
    destroyed: function() {
        window.removeEventListener('click', this.janelaClick);
    },
    props: [ 'myHeader', 'myFooter'],
}
</script>

<style scoped>
    /* Janela Modal (background) */
    .modal-win {
        position: fixed; /* Permanece na mesma posicao */
        z-index: 1; /* Sobrepoe os outros elementos */
        left: 0;
        top: 0;
        width: 100%; /* Largura total */
        height: 100%; /* Altura total */
        overflow: auto; /* Habilita o scroll caso necessario */
        background-color: rgb(0,0,0); /* Define cor Fallback */
        background-color: rgba(0,0,0,0.4); /* Define cor Preta/transparencia */
    }
 
    /* Conteudo da janela Modal */
    .modal-content {
        margin: 15% auto; /* 15% a partir do topo e centralizada */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Pode ser mais ou menos, dependendo do tamanho da tela */
    }

</style>