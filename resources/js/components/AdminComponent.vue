<template>
    <v-app id="inspire">
        <v-app id="inspire">
            <v-main>
                <v-container
                    class="fill-height"
                    fluid
                >
                    <v-row
                        align="center"
                        justify="center"
                    >
                        <v-col
                            cols="15"
                            sm="8"
                            md="8"
                        >
    <v-card>
        <v-card-title>
            <v-text-field
                v-model="search"
                append-icon="mdi-magnify"
                label="Search"
                single-line
                hide-details
            ></v-text-field>
        </v-card-title>
        <v-data-table
            :headers="headers"
            :items="listdata"
            :search="search"
        >
        <template v-for="list in listdata">
            <tr>
                <td>{{ list.name }}</td>
                <td>{{ list.email }}</td>
            </tr>
        </template>
            <template v-slot:[`item.actions`]="{ item }">
                <v-icon small class="mr-2" @click="redirect('/employee/edit/'+item.id)">mdi-pencil</v-icon>
                <v-icon small @click="deleteData(item.id)">mdi-delete</v-icon>
            </template>
        </v-data-table>
    </v-card>
                        </v-col>
                    </v-row>
                </v-container>
            </v-main>
        </v-app>
    </v-app>
</template>
<script>
    export default {
        data () {
            return {
                search: '',
                headers: [
                    { text: 'Name', value: 'name'},
                    { text: 'Email', value: 'email' },
                    { text: 'action', value: 'actions'},
                ],
                listdata: [],
            }
        },
        methods:{
            async loadData(options = {}){
                try {
                    let {data} = await axios.get('/api/list');
                    this.listdata = data;
                } catch ({response}) {
                    if (response.data.message) {
                        this.$root.$toast(response.data.message, true);
                    }
                }
            },
            editData(id) {
                redirect('/rulesets/edit/'+id)
            },
            async deleteData(id) {
                try {

                    let {data} = await axios.post('/api/delete',{'id':id});
                    this.$root.$toast(response.data.message, true);
                } catch ({response}) {
                    if (response.data.message) {
                        this.$root.$toast(response.data.message, true);
                    }
                }

            },
            redirect(path){
                this.$router.push(path);
            },
        },
        mounted() {
            this.loadData();
        },
        created() {
        }
    }
</script>
<style scoped>

</style>
