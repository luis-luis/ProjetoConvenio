// Função para avançar para a próxima etapa
function nextStep(step) {
    const currentStep = document.querySelector('.step:not([style*="display: none"])');
    const nextStep = document.getElementById(`step${step}`);

    // Adiciona efeito de loading
    currentStep.style.display = 'none';
    nextStep.style.display = 'block';

    // Atualiza os dados na etapa de confirmação
    if (step === 3) {
        const plano = document.querySelector('input[name="plano"]:checked').nextSibling.textContent.trim();
        const metodo = document.querySelector('input[name="metodo_pagamento"]:checked')?.nextSibling.textContent.trim();
        document.getElementById('planoSelecionado').textContent = plano || 'Não selecionado';
        document.getElementById('metodoSelecionado').textContent = metodo || 'Não selecionado';
    }
}

// Função para voltar para a etapa anterior
function prevStep(step) {
    const currentStep = document.querySelector('.step:not([style*="display: none"])');
    const prevStep = document.getElementById(`step${step}`);
    currentStep.style.display = 'none';
    prevStep.style.display = 'block';
}

// Função para submeter o formulário
function submitForm() {
    document.getElementById('mainForm').submit();
}

function nextStep(step) {
    // Mostra o spinner
    document.getElementById('loadingSpinner').style.display = 'flex';

    setTimeout(function () {
        // Esconde a etapa atual
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        const nextStep = document.getElementById(`step${step}`);
        currentStep.style.display = 'none';
        nextStep.style.display = 'block';

        // Atualiza os dados na etapa de confirmação
        if (step === 3) {
            const plano = document.querySelector('input[name="plano"]:checked').nextSibling.textContent.trim();
            const metodo = document.querySelector('input[name="metodo_pagamento"]:checked')?.nextSibling.textContent.trim();
            document.getElementById('planoSelecionado').textContent = plano || 'Não selecionado';
            document.getElementById('metodoSelecionado').textContent = metodo || 'Não selecionado';
        }

        // Esconde o spinner
        document.getElementById('loadingSpinner').style.display = 'none';
    }, 1000); // 1 segundo de loading
}

function prevStep(step) {
    // Mostra o spinner
    document.getElementById('loadingSpinner').style.display = 'flex';

    setTimeout(function () {
        // Esconde a etapa atual
        const currentStep = document.querySelector('.step:not([style*="display: none"])');
        const prevStep = document.getElementById(`step${step}`);
        currentStep.style.display = 'none';
        prevStep.style.display = 'block';

        // Esconde o spinner
        document.getElementById('loadingSpinner').style.display = 'none';
    }, 1000); // 1 segundo de loading
}

document.querySelectorAll('input[name="metodo_pagamento"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        if (this.value === 'cartao') {
            document.getElementById('cardForm').style.display = 'block';
        } else {
            document.getElementById('cardForm').style.display = 'none';
        }
    });
});