@extends('layouts.common')

@section('title', 'Computed Properties Process')

@section('content')

<h3 class="font-weight-bold text-danger text-decoration-underline border-bottom">Instruction for the Computed Properties Process:</h3>

<strong>#1: Basic Example </strong><br />

<xmp>
@verbatim
export default {
    data() {
        return {
        author: {
            name: 'John Doe',
            books: [
            'Vue 2 - Advanced Guide',
            'Vue 3 - Basic Guide',
            'Vue 4 - The Mystery'
            ]
        }
        }
    },
    computed: {
        // a computed getter
        publishedBooksMessage() {
        // `this` points to the component instance
        return this.author.books.length > 0 ? 'Yes' : 'No'
        }
    }
}

<p>Has published books:</p>
<span>{{ publishedBooksMessage }}</span>
@endverbatim
</xmp>


<strong>#2: Computed Caching vs. Methods </strong><br />
<xmp>
@verbatim
export default {
    data() {
        return {
        author: {
            name: 'John Doe',
            books: [
            'Vue 2 - Advanced Guide',
            'Vue 3 - Basic Guide',
            'Vue 4 - The Mystery'
            ]
        }
        }
    },
    computed: {
        // a computed getter
        publishedBooksMessage() {
        // `this` points to the component instance
        return this.author.books.length > 0 ? 'Yes' : 'No'
        }
    }
}

<p>Has published books:</p>
<span>{{ publishedBooksMessage }}</span>
@endverbatim
</xmp>


<strong>#3: Computed Caching vs. Methods </strong><br />
<xmp>
@verbatim
methods: {
    calculateBooksMessage() {
        return this.author.books.length > 0 ? 'Yes' : 'No'
    }
}

<p>{{ calculateBooksMessage() }}</p>

computed: {
    now() {
        return Date.now()
    }
}
@endverbatim
</xmp>

<strong>#4: Writable Computed  </strong><br />
<xmp>
@verbatim
export default {
    data() {
      return {
        firstName: 'John',
        lastName: 'Doe'
      }
    },
    computed: {
      fullName: {
        // getter
        get() {
          return this.firstName + ' ' + this.lastName
        },
        // setter
        set(newValue) {
          // Note: we are using destructuring assignment syntax here.
          [this.firstName, this.lastName] = newValue.split(' ')
        }
      }
    }
  }
@endverbatim
</xmp>
    

@endsection