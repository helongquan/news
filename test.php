<?php
	include_once("inc/header.php");
 ?>

<style>
/* 可以设置不同的进入和离开动画 */
/* 设置持续时间和动画函数 */
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active for below version 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}



.list-item {
  display: inline-block;
  margin-right: 10px;
}
.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-to
/* .list-leave-active for below version 2.1.8 */ {
  opacity: 0;
  transform: translateY(30px);
}



</style>

<div class="container">
	<div id="example-1">
	  <button @click="show = !show">
	    Toggle render
	  </button>
	  <transition name="slide-fade">
	    <p v-if="show">hello</p>
	  </transition>
	</div>
</div>

<div id="list-demo" class="demo">
  <button v-on:click="add">Add</button>
  <button v-on:click="remove">Remove</button>
  <transition-group name="list" tag="p">
    <span v-for="item in items" v-bind:key="item" class="list-item">
      {{ item }}
    </span>
  </transition-group>
</div>







<div id="example">
  <my-component></my-component>
  <your-component></your-component>
  <your-component></your-component>
  <her-component></her-component>
</div>

<script>
	// 注册
	Vue.component('my-component', {
	  template: '<div>A custom component!</div>'
	});
	Vue.component('your-component', {
	  template: '<div>你敢说这个是你的组件？</div>'
	});

	// 创建根实例
	new Vue({
	  el: '#example'
	});


	var Child = {
	  template: '<div>这个是子组件</div>'
	};
	var Second = {
	  template: '<div>这个是第二个子组件</div>'
	};

	new Vue({
	  // ...
	  components: {
	    // <my-component> 将只在父组件模板中可用
	    'my-component': Child,
	    'her-component': Second,
	  }
	})

</script>



<script>
	new Vue({
	  el: '#example-1',
	  data: {
	    show: true
	  }
	})
</script>


<script>
	new Vue({
	  el: '#list-demo',
	  data: {
	    items: ["苹果","柚子","西红柿","雪梨","芒果","李子","香蕉","杨梅","橘子"],
	    nextNum: 10
	  },
	  methods: {
	    randomIndex: function () {
	      return Math.floor(Math.random() * this.items.length)
	    },
	    add: function () {
	      this.items.splice(this.randomIndex(), 0, this.nextNum++)
	    },
	    remove: function () {
	      this.items.splice(this.randomIndex(), 1)
	    },
	  }
	})
</script>



<?php
include_once("inc/footer.php");
 ?>