<template>
    <div>
        <!-- Home -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Laravel - Vuejs</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                <p>Hello, <b v-text="user.name"></b> welcome.</p>
                <p>This dashboard was made with Bootstrap, Vuejs and Laravel Framework.</p>
            </div>
        </div>

        <!-- List basic items -->
        <div class="row">
            <!-- Item 1 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h4>Subtitle</h4>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3</th>
                            <td>item 3</td>
                            <td>view</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>item 2</td>
                            <td>view</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>item 1</td>
                            <td>view</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Item 2 -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h4>Subtitle</h4>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3</th>
                            <td>item 3</td>
                            <td>view</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>item 2</td>
                            <td>view</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>item 1</td>
                            <td>view</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    import { EventBus } from '../EventBus.js';

    export default {
        name: 'Home',
        data() {
            return {
                user: []
            }
        },
        methods: {
            changeView(title) {
                EventBus.$emit('changeView', title);
            },
            getUser() {
                axios.get('/api/user')
                    .then(response => {
                        this.user = response.data;
                    }).catch(error => {
                        console.log(error);
                });
            },
        },
        mounted() {
            this.changeView('Dashboard');
            this.getUser();
        }
    }
</script>
