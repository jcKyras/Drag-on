from django.db import models

# Create your models here.
class Impressora(models.Model):

    nome = models.CharField(max_length=50)
    cont_impressoes = models.IntegerField()
    cont_max_impressoes = models.IntegerField(default=1000)
    numero_serie = models.CharField(max_length=255, primary_key=True)
    modelo = models.ForeignKey(
        'ModeloImpressora',
        on_delete=models.CASCADE,
    )
    local = models.ForeignKey(
        'Local',
        on_delete=models.CASCADE,
    )
    online = models.BooleanField(default=False)
    operante = models.BooleanField(default=False)
    necessita_reparo = models.BooleanField(default=False)

    object = models.Manager()


class Medicao(models.Model):
    data = models.DateField()
    contador = models.IntegerField()
    impressora = models.ForeignKey(
        'Impressora',
        on_delete=models.CASCADE,
    )

    object = models.Manager()


class ModeloImpressora(models.Model):

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()

class Servidor(models.Model):
    
    matricula = models.CharField(max_length=255, primary_key=True)
    nome = models.CharField(max_length=255)
    grupo = models.ForeignKey(
        'Grupo',
        on_delete=models.CASCADE,
    )

    object = models.Manager()

class Local(models.Model):

    nome = models.CharField(max_length=255, primary_key=True)
    
    object = models.Manager()

class Permissao(models.Model):

    numero = models.IntegerField(primary_key=True)
    nome = models.CharField(max_length=50)

    object = models.Manager()

class Regra(models.Model):

    grupo = models.ForeignKey(
        'Grupo',
        on_delete=models.CASCADE,
    )
    grupo = models.ForeignKey(
        'Permissao',
        on_delete=models.CASCADE,
    )

class Grupo(models.Model):

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()

