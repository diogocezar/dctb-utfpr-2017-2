<template>
	<div>
		<div class="well">
			<input type="text" class="form-control" placeHolder="filtrar a lista" v-model="configs.filter">
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th><a href="#" @click="sort($event, 'name')">Nome</a></th>
					<th><a href="#" @click="sort($event, 'content')">Conteúdo</a></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="post in postsWithFilter">
					<td>{{ post.name }}</td>
					<td>{{ post.content }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
    export default {
    	data() {
    		return {
    			posts : [],
    			configs : {
    				orderBy: 'name',
    				order: 'asc',
    				filter: ''
    			}
    		}
    	},
        methods: {
            getJson: function(){
                axios.get('/api/posts').
                    then(response => {
                        this.posts = response.data.posts;
                    });
            },
            sort: function (ev, property){
                ev.preventDefault();
                this.configs.orderBy = property;
                if(this.configs.order == 'asc')
                    this.configs.order = 'desc';
                else
                    this.configs.order = 'asc';
            }
        },
        computed: {
            postsWithFilter: function(){
                const filter = this.configs.filter;
                const posts  = _.orderBy(this.posts, this.configs.orderBy, this.configs.order);
                if(_.isEmpty(filter))
                    return posts;
                return _.filter(posts, post => post.name.indexOf(filter) >= 0 || post.content.indexOf(filter) >= 0);
            }
        },
    	mounted(){
            this.getJson();
    	}
    }
</script>
