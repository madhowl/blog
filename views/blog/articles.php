{% extends "/blog/layout.php" %}


{% block content %}

<!-- Blog Post -->
{% for article in articles %}


<div class="card mb-4">
    <img class="card-img-top" src="{{article.image}}" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">{{article.title}}</h2>
        <p class="card-text">{{article.intro}}</p>
        <a href="/view/{{article.id}}" class="btn btn-primary">Читать полностью &rarr;</a>
    </div>
    <div class="card-footer text-muted">
        Posted on {{article.data}} by
        <a href="#">Start Bootstrap</a>
    </div>
</div>
{% endfor %}
{% endblock %}
