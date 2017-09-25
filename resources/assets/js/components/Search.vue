<template>

    <div>

        <div class="columns">
            <div class="column is-one-quarter">
                <hr class="is-hidden-mobile">
            </div>
            <div class="column is-half">
                <div class="control" v-bind:class="{'is-loading': busy}">
                    <input type="text" class="search" placeholder="type here to search for templates" v-model="search" autofocus>
                </div>
            </div>
            <div class="column is-one-quarter">
                <hr class="is-hidden-mobile">
            </div>
        </div>

        <div class="columns" v-for="templates in chunkTemplates">

            <div class="column is-4" v-for="template in templates">

                <div class="card">

                    <div class="card-image">
                        <a :href="template.demo" target="_blank">
                            <figure class="image is-4by3">
                                <img :src="template.thumbnail" alt="Image">
                            </figure>
                        </a>
                    </div>

                    <div class="card-content">

                        <div class="columns">

                            <div class="column is-8 template-title">
                                <h2>{{ template.name }}</h2>
                                <p>{{ template.title }}</p>
                            </div>

                            <div class="column is-2">
                                <a class="button is-dark" :href="template.buy">Buy for ${{ template.price }}</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        <nav class="custom-pagination" role="navigation" v-show="showPagination">
            <button class="button is-dark is-outlined" :disabled="!hasPrevious" v-bind:class="{'is-loading': busy}">Previous</button>
            <button class="button is-dark is-outlined" :disabled="!hasNext" v-bind:class="{'is-loading': busy}">Next page</button>
        </nav>

    </div>

</template>

<script>

    import axios from 'axios';

    export default {

        data() {
            return {
                templates: [],
                pagination: {
                    next_page_url: null,
                    prev_page_url: null
                },
                search: '',
                timeout: null,
                busy: false
            };
        },

        mounted() {

            this.searchTemplates();

        },

        computed: {

            chunkTemplates() {

                let start, end, chunk = 3;

                let chunked = [];

                for (start = 0, end = this.templates.length; start < end; start += chunk) {

                    chunked.push(this.templates.slice(start, start + chunk));

                }

                return chunked;

            },

            hasNext() {

                return this.pagination.next_page_url !== null;

            },

            hasPrevious() {

                return this.pagination.prev_page_url !== null;

            },

            showPagination() {

                return this.hasNext || this.hasPrevious;

            }

        },

        watch: {

            search(newValue) {

                clearTimeout(this.timeout);
                this.timeout = setTimeout(function () {

                    this.searchTemplates(newValue);

                }.bind(this), 500);

            }

        },

        methods: {

            searchTemplates(value = '') {

                this.busy = true;

                axios.get('/api/templates?s=' + value).then(function (response) {

                    this.templates = response.data.data;
                    this.pagination = response.data;

                    this.busy = false;

                }.bind(this));

            }

        }

    }
</script>
