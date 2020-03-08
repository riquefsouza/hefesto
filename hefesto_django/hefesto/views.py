from django.shortcuts import render
from .models import Role


def home(request):
    nome = 'henrique'
    roles = Role.objects.all()
    return render(request, 'hefesto.html', {'nome': nome, 'roles': roles})
