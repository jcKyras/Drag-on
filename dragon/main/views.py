from django.shortcuts import render
from django.http import HttpResponse
from .models import Impressora

# Create your views here.
def home(request):
    impressoras = Impressora.object.all()

    contexto = {'impressoras': impressoras}

    return render(request, 'index.html', contexto)
