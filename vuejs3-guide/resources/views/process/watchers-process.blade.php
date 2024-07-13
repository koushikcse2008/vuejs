@extends('layouts.common')

@section('title', 'Watchers Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Watchers Process:</h3>

<strong>#1: Watchers</strong><br />
<xmp>
@verbatim
export default {
    data() {
      return {
        question: '',
        answer: 'Questions usually contain a question mark. ;-)',
        loading: false
      }
    },
    watch: {
      // whenever question changes, this function will run
      question(newQuestion, oldQuestion) {
        if (newQuestion.includes('?')) {
          this.getAnswer()
        }
      }
    },
    methods: {
      async getAnswer() {
        this.loading = true
        this.answer = 'Thinking...'
        try {
          const res = await fetch('https://yesno.wtf/api')
          this.answer = (await res.json()).answer
        } catch (error) {
          this.answer = 'Error! Could not reach the API. ' + error
        } finally {
          this.loading = false
        }
      }
    }
}
    
<p>
Ask a yes/no question:
<input v-model="question" :disabled="loading" />
</p>
<p>{{ answer }}</p>
@endverbatim
</xmp>

<strong>#2: Deep Watchers</strong><br />
<xmp>
@verbatim
export default {
    watch: {
      someObject: {
        handler(newValue, oldValue) {
          // Note: `newValue` will be equal to `oldValue` here
          // on nested mutations as long as the object itself
          // hasn't been replaced.
        },
        deep: true
      }
    }
}
@endverbatim
</xmp>

<strong>#3: Eager Watchers</strong><br />
<xmp>
@verbatim
export default {
    // ...
    watch: {
      question: {
        handler(newQuestion) {
          // this will be run immediately on component creation.
        },
        // force eager callback execution
        immediate: true
      }
    }
    // ...
}
@endverbatim
</xmp>

<strong>#4: Once Watchers</strong><br />
<xmp>
@verbatim
export default {
    watch: {
      source: {
        handler(newValue, oldValue) {
          // when `source` changes, triggers only once
        },
        once: true
      }
    }
}
@endverbatim
</xmp>

<strong>#5: Post Watchers</strong><br />
<xmp>
@verbatim
export default {
    // ...
    watch: {
      key: {
        handler() {},
        flush: 'post'
      }
    }
}
@endverbatim
</xmp>

<strong>#6: Sync Watchers</strong><br />
<xmp>
@verbatim
export default {
    // ...
    watch: {
      key: {
        handler() {},
        flush: 'sync'
      }
    }
}
@endverbatim
</xmp>

<strong>#7: this.$watch()</strong><br />
<xmp>
@verbatim
export default {
    created() {
      this.$watch('question', (newQuestion) => {
        // ...
      })
    }
}
@endverbatim
</xmp>

<strong>#8: Stopping a Watcher </strong><br />
<xmp>
@verbatim
const unwatch = this.$watch('foo', callback)

// ...when the watcher is no longer needed:
unwatch()
@endverbatim
</xmp>

@endsection