<template>

    <div>

        <div class="columns">
            <div class="column is-one-quarter">
                <hr class="is-hidden-mobile">
            </div>
            <div class="column is-half">
                <div class="control" v-bind:class="{'is-loading': busy}">
                    <input type="text" class="search" placeholder="type here to search for templates" v-model="search"
                           autofocus>
                </div>
            </div>
            <div class="column is-one-quarter">
                <hr class="is-hidden-mobile">
            </div>
        </div>

        <div class="columns" v-for="templates in chunkTemplates" v-show="!busy">

            <div class="column is-4" v-for="template in templates">

                <div class="card">

                    <div class="card-image">
                        <a :href="template.demo" target="_blank">
                            <figure class="image is-2by1">
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

        <div v-show="!hasTemplates && !busy" class="has-text-centered">

            <h2 class="title">No templates found</h2>

            <h3 class="subtitle">
                But don't worry, just request a template and we will get it for you from our vendors!</h3>

            <p><a href="/pages/request-a-template" class="button is-black is-outlined">Request template</a></p>

        </div>

        <div v-show="busy" class="has-text-centered">

            <img src="/img/loading.gif" alt="Loading...">

        </div>

        <nav class="custom-pagination" role="navigation" v-show="showPagination">
            <button class="button is-dark is-outlined" :disabled="!hasPrevious" v-bind:class="{'is-loading': busy}"
                    @click="previousPage">Previous
            </button>
            <button class="button is-dark is-outlined" :disabled="!hasNext" v-bind:class="{'is-loading': busy}"
                    @click="nextPage">Next page
            </button>
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
                    prev_page_url: null,
                    current_page: 1
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

            hasTemplates() {

                return this.templates.length > 0;

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

            nextPage() {

                if (!this.hasNext)
                    return;

                this.searchTemplates(this.search, this.pagination.current_page + 1);

            },

            previousPage() {

                if (!this.hasPrevious)
                    return;

                this.searchTemplates(this.search, this.pagination.current_page - 1);

            },

            searchTemplates(value = '', page = 1) {

                this.busy = true;

                axios.get('/api/templates?s=' + value + '&page=' + page).then(function (response) {

                    this.templates = response.data.data;
                    this.pagination = response.data;

                    this.busy = false;

                }.bind(this));

            }

        }

    }
</script>
