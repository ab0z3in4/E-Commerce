window.addEventListener('load', function() {
    var comments = localStorage.getItem('comments');
    if (comments) {
        document.getElementById('commentsSection').innerHTML = comments;
    }
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.comment-form form').addEventListener('submit', function(event) {
        event.preventDefault();

        var name = document.getElementById('name').value;
        var rating = document.getElementById('rating').value;
        var comment = document.getElementById('comment').value;

        var newComment = '<div class="user-review">' +
            '<div class="user-info">' +
            '<h3>' + name + '</h3>' +
            '<div class="rating">';

        // Dynamically generate stars based on rating
        for (var i = 0; i < 5; i++) {
            if (i < rating) {
                newComment += '<span class="fa fa-star checked"></span>';
            } else {
                newComment += '<span class="fa fa-star"></span>';
            }
        }
        newComment += '</div>' +
            '</div>' +
            '<p>' + comment + '</p>' +
            '<button class="modify">Modify</button>' +
            '<button class="delete">Delete</button>' +
            '</div>';

        // Append new comment to the comments section
        document.getElementById('commentsSection').innerHTML += newComment;

        // Save comments to local storage
        localStorage.setItem('comments', document.getElementById('commentsSection').innerHTML);

        // Clear form fields
        document.getElementById('name').value = '';
        document.getElementById('rating').value = '5';
        document.getElementById('comment').value = '';
    });

    // Add event listeners for modify and delete buttons
    document.getElementById('commentsSection').addEventListener('click', function(event) {
        if (event.target.classList.contains('modify')) {
            var commentDiv = event.target.closest('.user-review');
            var commentText = commentDiv.querySelector('p').textContent;
            var commentIndex = Array.from(commentDiv.parentElement.children).indexOf(commentDiv);
            var name = commentDiv.querySelector('h3').textContent;
            var rating = commentDiv.querySelector('.rating').querySelectorAll('.fa-star.checked').length;

            document.getElementById('name').value = name;
            document.getElementById('rating').value = rating;
            document.getElementById('comment').value = commentText;

            // Delete the comment from the DOM and local storage
            commentDiv.remove();
            var comments = document.getElementById('commentsSection').innerHTML;
            localStorage.setItem('comments', comments);
        } else if (event.target.classList.contains('delete')) {
            var commentDiv = event.target.closest('.user-review');
            commentDiv.remove(); 
            document.getElementById('deleteMessage').style.display = 'block';
            setTimeout(function() {
    document.getElementById('deleteMessage').style.display = 'none';
}, 3000);

// Update localStorage
var comments = document.getElementById('commentsSection').innerHTML;
localStorage.setItem('comments', comments);


        }
    });
});