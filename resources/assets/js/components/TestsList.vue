<template>
    <div class="table-container tests">
        <table id="tests-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Identyfikator</th>
                    <th>Typ</th>
                    <th>Utworzony</th>
                    <th>Wypełniony</th>
                    <th>Zakończony</th>
                    <th>Opcje</th>
                </tr>
            </thead>
        </table>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                table: null
            }
        },

        mounted() {
            this.table = $('#tests-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url : '/tests/data',
                },
                columns:[
                    { data: 'id', name: 'id', searchable: true },
                    { data: 'identifier', name: 'identifier', searchable: true },
                    { data: 'type.name', name: 'type.name', searchable: true },
                    { data: 'created_at', name: 'created_at', searchable: true },
                    { data: 'completed', name: 'completed', searchable: false },
                    { data: 'finished_at', name: 'finished_at', searchable: true },
                    { data: 'options', name: 'options', searchable: false }
                ]
            });

        },

        methods: {

        }
    }
</script>
