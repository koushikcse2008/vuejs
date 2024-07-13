@extends('layouts.common')

@section('title', 'Component Basics Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Component Basics Process:</h3>

<strong>#1: Defining a Component </strong><br />
<xmp>
@verbatim
<script>
export default {
    data() {
    return {
        count: 0
    }
    }
}
</script>

<template>
    <button @click="count++">You clicked me {{ count }} times.</button>
</template>
@endverbatim
</xmp>

<strong>#2: Using a Component </strong><br />
<xmp>
@verbatim
<script>
import ButtonCounter from './ButtonCounter.vue'

export default {
    components: {
    ButtonCounter
    }
}
</script>

<template>
    <h1>Here is a child component!</h1>
    <ButtonCounter />
</template>
@endverbatim
</xmp>

<strong>#3: Passing Props</strong><br />
<xmp>
@verbatim
export default {
    // ...
    data() {
        return {
        posts: [
            { id: 1, title: 'My journey with Vue' },
            { id: 2, title: 'Blogging with Vue' },
            { id: 3, title: 'Why Vue is so fun' }
        ]
        }
    }
}

<BlogPost
  v-for="post in posts"
  :key="post.id"
  :title="post.title"
 />
@endverbatim
</xmp>

<strong>#4: Listening to Events</strong><br />
<xmp>
@verbatim
data() {
    return {
      posts: [
        /* ... */
      ],
      postFontSize: 1
    }
}

<div :style="{ fontSize: postFontSize + 'em' }">
    <BlogPost
      v-for="post in posts"
      :key="post.id"
      :title="post.title"
    />
</div>

<!-- BlogPost.vue, omitting <script> -->
<template>
    <div class="blog-post">
        <h4>{{ title }}</h4>
        <button @click="$emit('enlarge-text')">Enlarge text</button>
    </div>
</template>

<!-- BlogPost.vue -->
<script>
export default {
    props: ['title'],
    emits: ['enlarge-text']
}
</script>
@endverbatim
</xmp>

<strong>#5: Content Distribution with Slots</strong><br />
<xmp>
@verbatim
<!-- AlertBox.vue -->
<template>
    <div class="alert-box">
      <strong>This is an Error for Demo Purposes</strong>
      <slot />
    </div>
</template>

<style scoped>
.alert-box {
/* ... */
}
</style>
@endverbatim
</xmp>

<strong>#6: Dynamic Components</strong><br />
<xmp>
@verbatim
<!-- Component changes when currentTab changes -->
<component :is="currentTab"></component>
@endverbatim
</xmp>

<strong>#7: in-DOM Template Parsing Caveats - Case Insensitivity</strong><br />
<xmp>
@verbatim
// camelCase in JavaScript
const BlogPost = {
  props: ['postTitle'],
  emits: ['updatePost'],
  template: `
    <h3>{{ postTitle }}</h3>
  `
}

<!-- kebab-case in HTML -->
<blog-post post-title="hello!" @update-post="onUpdatePost"></blog-post>
@endverbatim
</xmp>

<strong>#8: Element Placement Restrictions</strong><br />
<xmp>
@verbatim
<table>
    <blog-post-row></blog-post-row>
</table>

<table>
    <tr is="vue:blog-post-row"></tr>
</table>
@endverbatim
</xmp>

@endsection