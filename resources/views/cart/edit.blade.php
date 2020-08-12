<div id="wrapper">
             <div id="page" class="container">
                 <h1 class="heading has-text-weigt-bold is-size-6">Update Contact</h1>


         <form method="POST" action="/cart/{{ $cart->id }}">
            @csrf
            @method('PUT')
             <div class="field">
                 <label class="label" for="name">Name</label>

                 <div class="control">
                     <textarea class="textarea" name="name" id="name">{{ $cart->name }}</textarea>
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="email">Email</label>

                 <div class="control">
                     <textarea class="textarea" name="email" id="email">{{ $cart->email }}</textarea>
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="subject">Subject</label>

                 <div class="control">
                     <textarea class="textarea" name="subject" id="subject">{{ $cart->subject }}</textarea>
                 </div>
             </div>

                <div class="field">
                 <label class="label" for="message">Message</label>

             <div class="control">
                 <textarea class="textarea" name="message" id="message">{{ $cart->message }}</textarea>
             </div>
             </div>
             <div class="field is grouped">
                 <div class="control">
                     <button class="button is-link" type="submit">SUBMIT</button>
                 </div>
             </div>

         </form>
             </div>
         </div>