from django.shortcuts import render
from django.http import HttpResponse
from .models import Medicao

# Create your views here.
def home(request):
    
    medicoes = Medicao.object.all()

    contexto = {'medicoes':medicoes}

    return render(request, 'index.html', contexto)
