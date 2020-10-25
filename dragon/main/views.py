from django.shortcuts import render
from django.http import HttpResponse
from .models import Medicao, Impressora

# Create your views here.
def home(request):
    
    impressoras = Impressora.objects.all()
    ultimas_medicoes = []
    for impressora in impressoras:
        medicao = Medicao.objects.filter(impressora__nome=impressora.nome).latest()
        ultimas_medicoes.append(medicao)

    contexto = {'ultimas_medicoes':ultimas_medicoes}

    return render(request, 'index.html', contexto)
