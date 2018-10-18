<template>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="/dashboard" @click="changeView('Dashboard')">
                    Laravel
                </a>
            </li>
            <li>
                <a href="/dashboard" @click="changeView('Dashboard')">Item 1</a>
            </li>
            <li>
                <a href="/item2" @click="changeView('Name View')">Item 2</a>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" :class="{'active': category1}" @click="category1 = !category1">Category 1</a>

                    <div class="dropdown-sidebar" :class="{'active': category1}">
                        <li>
                            <a href="#">Itemn 1</a>
                        </li>
                        <li>
                            <a href="#">Itemn 2</a>
                        </li>
                        <li>
                            <a href="#">Itemn 3</a>
                        </li>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a href="#" :class="{'active': category2}" @click="category2 = !category2">Category 2</a>

                    <div class="dropdown-sidebar" :class="{'active': category2}">
                        <li>
                            <a href="/usuarios">Item 1</a>
                        </li>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" @click="logout">Logout</a>
            </li>
        </ul>
    </div>
</template>

<script>
    import { EventBus } from '../EventBus.js';

    export default {
        name: 'Sidebar',
        data() {
            return {
                category1: false,
                category2: false,
                category3: false,
            }
        },
        methods: {
            changeView(title) {
                EventBus.$emit('changeView', title);
            },
            logout() {
                axios.post('logout').then(() => {
                    // location.reload();
                    location.href = "/";
                })
                .catch(error => {
                    console.log(error.response);
                });
            },
        }
    }
</script>
