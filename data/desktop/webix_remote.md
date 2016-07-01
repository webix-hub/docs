Webix Remote
==============

Webix Remote is a special protocol that allows the client component to call functions on the server directly.

Thus, Webix Remote provides a quicker and more simple communication with the server in comparison with REST API. 

##REST API Drawbacks

A usual request to the server via REST API implies forming a corresponding URL. Each request requires a new URL sending. Besides, requests are sent and 
processed one by one thus making a queue, which slows down the whole process of exchanging data.

##What Webix Remote Offers 

Webix Remote presents a handy alternative to REST API. It implies that during data sending
the stage with URLs formation is dropped and a request goes directly to the server (via the *webix.remote* parameter).

General advantages of this protocol are enumerated below:

- Several requests are sent as one. It considerably enhances the speed of executing operations
- Data is sent asynchronously (leaving the possibility to go the synchronous way, if it's necessary); promises are used instead of real data to speed up data rendering
- CSRF-security. User's credentials are protected and kept safe
- Information about user is kept as static data on the server and shared with the client side when it's necessary (when a user session started)
- Access to API is limited by the user role

##Server-side implementations

Webix Remote can be used for the following languages:

- Node.js ([read the guide](desktop/webix_remote_nodejs.md))
- PHP (read the guide)


@index:

- desktop/webix_remote_nodejs.md